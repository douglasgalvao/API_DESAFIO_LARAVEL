import { Component, OnInit } from '@angular/core';
import { FormBuilder, FormGroup, Validators } from '@angular/forms';
import { CrudService } from 'src/app/services/crud.service';

@Component({
  selector: 'app-crud',
  templateUrl: './crud.component.html',
  styleUrls: ['./crud.component.scss']
})
export class CrudComponent implements OnInit {
  protected formCity!: FormGroup
  protected formNeighbor!: FormGroup
  protected saved: Boolean = false;
  constructor(private formBuilder: FormBuilder, private crudService: CrudService) { }

  ngOnInit(): void {
    this.initFormCity();
    this.initFormNeighbors();
  }

  onSubmitCity() {
    console.log(this.formCity.value)
    this.crudService.saveCity(this.formCity.value).subscribe(res => {
      this.saved = true;
    }, (error => {
      console.log(error)
    }));
  }
  onSubmitNeighbor() { }

  initFormCity() {
    this.formCity = this.formBuilder.group({
      name: ['', [Validators.required]],
      state: ['', [Validators.required]],
      fundation_date: ['', [Validators.required]]
    })
  }
  initFormNeighbors() {
    this.formNeighbor = this.formBuilder.group({
      name: ['', [Validators.required]],
      city_id: ['', [Validators.required]]
    })
  }

}

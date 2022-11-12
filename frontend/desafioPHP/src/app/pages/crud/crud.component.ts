import { Component, OnInit } from '@angular/core';
import { FormBuilder, FormGroup, Validators } from '@angular/forms';

@Component({
  selector: 'app-crud',
  templateUrl: './crud.component.html',
  styleUrls: ['./crud.component.scss']
})
export class CrudComponent implements OnInit {
  protected formCity!: FormGroup
  protected formNeighbor!: FormGroup
  constructor(private formBuilder: FormBuilder) { }

  ngOnInit(): void {
  }

  onSubmitCity() { }
  onSubmitNeighbor() { }

  initForm() {
    this.formCity = this.formBuilder.group({
      city: ['', [Validators.required]],
      state: ['', [Validators.required]],
      fundation_date: ['', [Validators.required]]
    })

    this.formNeighbor = this.formBuilder.group({
      name: ['', [Validators.required]],
      city_id: ['', [Validators.required]]
    })

  }

}

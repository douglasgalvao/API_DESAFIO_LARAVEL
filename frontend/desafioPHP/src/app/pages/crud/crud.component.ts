import { Component, OnInit } from '@angular/core';
import { FormBuilder, FormGroup } from '@angular/forms';

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

  onSubmitCity(){}
  onSubmitNeighbor(){}

}

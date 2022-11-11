import { Component, OnInit } from '@angular/core';
import { FormBuilder, FormGroup } from '@angular/forms';

@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.scss']
})
export class LoginComponent implements OnInit {
  private formLogin!: FormGroup;
  constructor(private formBuilder: FormBuilder) { }

  ngOnInit(): void {
  }

  private initForm(): void {
    this.formLogin = this.formBuilder.group({
      login: ["", [Validators.required]],
      password: ["", [Validators.required]]
    })
  }


  onSubmit(){

  }

}

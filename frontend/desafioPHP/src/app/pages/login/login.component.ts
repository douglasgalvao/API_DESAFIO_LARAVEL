import { Component, OnInit } from '@angular/core';
import { FormBuilder, FormGroup, Validators } from '@angular/forms';
import { Router } from '@angular/router';
import { AuthService } from 'src/app/auth.service';

@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.scss']
})
export class LoginComponent implements OnInit {
  protected formLogin!: FormGroup;
  protected logged!: Boolean;
  constructor(private formBuilder: FormBuilder, private authService: AuthService, private router: Router) { }

  ngOnInit(): void {
    this.initForm();
  }

  private initForm(): void {
    this.formLogin = this.formBuilder.group({
      email: ["", [Validators.required]],
      password: ["", [Validators.required]]
    })
  }


  onSubmit() {
    this.authService.doLogin(this.formLogin.value).subscribe(e => {
      this.authService.updateToken(e.token);
      this.authService.updateUser(e.user);
      this.router.navigate(["/crud"]);
    }, (error => {
      console.log(error);
    }))
  }

}

import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { LocalStorageService } from 'angular-web-storage';
import { Observable } from 'rxjs/internal/Observable';
import { environment } from 'src/environments/environment';
import { LoginModel } from '../models/login.model';
import { UserModel } from '../models/user.model';


@Injectable({
  providedIn: 'root'
})
export class AuthService {

  constructor(
    private httpCliente: HttpClient,
    private storageService: LocalStorageService
  ) { }

  doLogin(data: LoginModel) {
    return this.httpCliente.post<{
      token: string, user: UserModel
    }>(environment.apiUrl.concat('/login'), data, {
      headers: {
        'Content-Type': 'application/json',
        'Accept': 'application/json'
      }
    });
  }

  updateToken(token: string) {
    this.storageService.set(environment.session.token, token);
  }

  updateUser(user: UserModel) {
    this.storageService.set(environment.session.user, user);
  }

  get token() {
    return this.storageService.get(environment.session.token) as string;
  }

  get user() {
    return this.storageService.get(environment.session.user) as UserModel;
  }



}

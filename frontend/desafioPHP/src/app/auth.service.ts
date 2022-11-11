import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { LocalStorageService } from 'angular-web-storage';

@Injectable({
  providedIn: 'root'
})
export class AuthService {

  constructor(
    private httpCliente: HttpClient,
    private storageService: LocalStorageService
  ) { }





}

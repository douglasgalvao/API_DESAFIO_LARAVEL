import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { LocalStorageService } from 'angular-web-storage';
import { environment } from 'src/environments/environment';
import { CityModel } from '../models/city.model';

@Injectable({
  providedIn: 'root'
})
export class CrudService {

  constructor(private httpCliente: HttpClient, private webStorage: LocalStorageService) {

  }

  saveCity(data: CityModel) {
    console.log(environment.apiUrl.concat("/cities"));
    return this.httpCliente.post(environment.apiUrl.concat("/cities"), { data }, {
      headers: {
        'Content-Type': 'application/json',
        'Authorization': 'Bearer ' + this.webStorage.get(environment.session.token),
        'Accept': '*/*'
      }
    })
  }
  listCities() { }
  saveNeighbor() { }
  listNeighbors() { }
}

import { Component, OnInit, ViewChild, ElementRef } from '@angular/core';
import {AngularFireDatabase} from '@angular/fire/database';
import { Geolocation } from '@ionic-native/geolocation';
import { Map, latLng, tileLayer, marker, Layer} from 'leaflet';
import {NavController} from '@ionic/angular';
import * as L from 'leaflet';


@Component({
  selector: 'app-unusual-place',
  templateUrl: './unusual-place.page.html',
  styleUrls: ['./unusual-place.page.scss'],
})
export class UnusualPlacePage implements OnInit {
  constructor(public afDB: AngularFireDatabase) { }

  ngOnInit() {
    const map = L.map('map').setView([51.505, -0.09], 13);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    L.marker([51.5, -0.09]).addTo(map)
        .bindPopup('Voici ma pop-up de test')
        .openPopup();
  }
/*
  add() {
    this.afDB.list('Users').push({
      pseudo: 'Nicolas'
    });
  }

  delete() {
    this.afDB.list('Randonnees').remove();
  }
*/


}

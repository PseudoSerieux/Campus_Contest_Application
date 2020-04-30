import { Component, OnInit } from '@angular/core';
import {AngularFireDatabase} from '@angular/fire/database';
import * as L from 'leaflet';
import('leaflet-routing-machine');
import 'leaflet-control-geocoder';



@Component({
  selector: 'app-unusual-place',
  templateUrl: './unusual-place.page.html',
  styleUrls: ['./unusual-place.page.scss'],
})
export class UnusualPlacePage implements OnInit {
  constructor(public afDB: AngularFireDatabase) { }

  ngOnInit() {

    const map = L.map('map').setView([0, 0], 2);
    L.tileLayer('https://{s}.tile.osm.org/{z}/{x}/{y}.png', {
      attribution: '&copy; <a href="https://osm.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);


    L.marker([57.73, 11.94]).addTo(map)
        .bindPopup('Pop-up test')
        .openPopup();
    L.Routing.control({
          waypoints: [
            L.latLng(57.74, 11.94),
            L.latLng(57.6792, 11.949)
          ],
          routeWhileDragging: true,
          /*geocoder: L.Control.Geocoder.nominatim(),*/
    }).addTo(map);
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

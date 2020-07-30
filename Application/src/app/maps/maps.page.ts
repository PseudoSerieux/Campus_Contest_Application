import { Component, OnInit } from '@angular/core';
import {AngularFireDatabase} from '@angular/fire/database';
import * as L from 'leaflet';
import('leaflet-routing-machine');
import 'leaflet-control-geocoder';

@Component({
  selector: 'app-maps',
  templateUrl: './maps.page.html',
  styleUrls: ['./maps.page.scss'],
})
export class MapsPage implements OnInit {
  baseUrl = 'assets/icon/';

  constructor(public afDB: AngularFireDatabase) {
     /*this.getUsersDatabase();*/
     this.getPointDatabase();
     /*this.getLatitudePoint();*/
    /* this.getLongitudePoint();*/
   
  }

  ngOnInit() {

    const map = L.map('map').setView([0, 0], 2);
    L.tileLayer('https://{s}.tile.osm.org/{z}/{x}/{y}.png', {
      attribution: '&copy; <a href="https://osm.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    setTimeout(function(){ map.invalidateSize()}, 400);

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

  /* RECUPERATION POINTS EN BDD */

  getPointDatabase() {
    for (let i = 0; i <= 573; i++) {
    this.afDB.list('randonnees/features/' + i + '/properties/').snapshotChanges(['child_added']).subscribe(points => {
      //console.log(points);
     // console.log(points[0]);

      points.forEach(point => {
        
        //console.log(point);
        if (point.key == "LONGITUDE") {
          //console.log(point.key);
          //console.log('dans la boucle');
          const longitude = [point.payload.exportVal()];
          return longitude;

        } else if (point.key == "LATITUDE") {
          //console.log(point.key);
          //console.log('dans la boucle');
          const latitude = [point.payload.exportVal()];

          return latitude

        } else {
          return "";
        }


      });
    });
    }
  }

/*
  getLatitudePoint() {
    for (let i = 0; i <= 573; i++) {
      this.afDB.list('randonnees/features/' + i + '/properties/').snapshotChanges(['child_added']).subscribe(points => {
        points.forEach(point => {
          console.log('LATITUDE: ' + point.payload.val());
        });
      });
    }
  }
*/

  /*
  getLongitudePoint() {
    for (let i = 0; i <= 573; i++) {
      this.afDB.list('randonnees/features/' + i + '/properties/').snapshotChanges(['child_added']).subscribe(points => {
        points.forEach(point => {
          console.log('LONGITUDE: ' + point.payload.exportVal());
        });
      });
    }
  }
  */


/* ENVOI DETAILS POINTS */
/*
  getDetailsPoints(point: any) {
    console.log(point);
    this.points.push({
      valeur: point.payload.exportVal()
    });
  }
*/

/* TEST RECUPERATION DES UTILISATEURS EN BDD */
/*
  getUsersDatabase() {
    this.afDB.list('Users/').snapshotChanges(['child_added']).subscribe(users => {
      users.forEach(user => {
        console.log('User: ' + user.payload.exportVal().pseudo);
      });
    });
  }
*/

/* BOUTON AJOUT VALEUR BDD + BOUTON SUPPRESION TABLE */
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

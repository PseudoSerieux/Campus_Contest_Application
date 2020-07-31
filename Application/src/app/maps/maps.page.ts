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

  getPointDatabase(){
    for (let i = 0; i <= 573; i++) {
    this.afDB.list('randonnees/features/' + i + '/properties/').snapshotChanges(['child_added']).subscribe(points => {
      //console.log(points);
      //console.log(points[0]);
      //console.log("test1");
      points.forEach(point => {
        
        //console.log(point);
        if (point.key == "LONGITUDE") {
          //console.log("test2");
          //console.log(point.key);
          //console.log('dans la boucle');
          var longitude: number;
          longitude = point.payload.exportVal();
         // this.getDataLongitude(longitude);
          return longitude;
        //  console.log(longitude);

        } else if (point.key == "LATITUDE") {
          //console.log("test3");
          //console.log(point.key);
          //console.log('dans la boucle');
        
          var latitude: Number;
          latitude = point.payload.exportVal();
          //this.getDataLatitude(latitude);
          return latitude;
          //console.log(latitude);
         

        } else {
          //test return format number
        }
      });
    });
    }
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
            L.latLng(47.26, -1.48),
            L.latLng(57.6792, 11.949)
          ],
          routeWhileDragging: true,
          /*geocoder: L.Control.Geocoder.nominatim(),*/
    }).addTo(map);
  }

  

  /* RECUPERATION POINTS EN BDD */

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

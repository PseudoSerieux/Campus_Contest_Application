import { Component, OnInit } from '@angular/core';
import {Geolocation} from '@ionic-native/geolocation/ngx';

declare var google: any;

@Component({
  selector: 'app-maps',
  templateUrl: './maps.page.html',
  styleUrls: ['./maps.page.scss'],
})
export class MapsPage implements OnInit {
  map: any;

  constructor(public geolocation: Geolocation) {
    this.load();
  }


  load() {

    this.geolocation.getCurrentPosition().then((resp) => {
      let lat = resp.coords.latitude;
      let lng = resp.coords.longitude;
      const latLng = new google.maps.LatLng(lat, lng);
      this.map = new google.maps.Map(document.getElementById('map_canvas'), {
        zoom: 14,
        center: latLng,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        mapTypeControl: false
      });


      this.addMyPosition(latLng);
      this.addMarkerPosition();
      /*this.addCarPosition();*/
    });
  }

  addMyPosition(latLng) {
    const marker = new google.maps.Marker({
      map: this.map,
      position: latLng,
      animation: google.maps.Animation.DROP,
      title: 'My position'
    });
    this.addInfoWindowToMarker(marker);
  }

  addInfoWindowToMarker(marker) {
    const infoWindowContent = '<div id="content">' + marker.title + '</div>';
    const infoWindow = new google.maps.InfoWindow({
      content: infoWindowContent
    });
    marker.addListener('click', () => {
      infoWindow.open(this.map, marker);
    });
  }

  addMarkerPosition() {
    const latLng = new google.maps.LatLng(47.273165, -1.573204);
    const marker = new google.maps.Marker({
      map: this.map,
      position: latLng,
      animation: google.maps.Animation.DROP,
      title: 'regarde commen c tro joli!!!!!!!!!',
    });
    this.addInfoWindowToMarker(marker);
  }


  ngOnInit() {
  }

}

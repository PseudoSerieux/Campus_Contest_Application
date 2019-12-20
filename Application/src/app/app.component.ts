import { Component } from '@angular/core';

import { Platform } from '@ionic/angular';
import { SplashScreen } from '@ionic-native/splash-screen/ngx';
import { StatusBar } from '@ionic-native/status-bar/ngx';

@Component({
  selector: 'app-root',
  templateUrl: 'app.component.html',
  styleUrls: ['app.component.scss']
})
export class AppComponent {
  public appPages = [
    {
      title: 'Randonnée',
      url: '/randonnée',
      icon: '/icon/randonnee.png'
    },
    {
      title: 'Lieux insolites',
      url: '/lieux-insolites',
      icon: ''
    },
    {
      title: 'Camera',
      url: '/camera',
      icon: '../assets/icon/camera.png'
    },
    {
      title: 'Maps',
      url: '/maps',
      icon: ''
    }
  ];

  constructor(
      private platform: Platform,
      private splashScreen: SplashScreen,
      private statusBar: StatusBar
  ) {
    this.initializeApp();
  }

  initializeApp() {
    this.platform.ready().then(() => {
      this.statusBar.styleDefault();
      this.splashScreen.hide();
    });
  }
}

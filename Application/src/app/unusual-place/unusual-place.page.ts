import { Component, OnInit } from '@angular/core';
import {AngularFireDatabase} from '@angular/fire/database';

@Component({
  selector: 'app-unusual-place',
  templateUrl: './unusual-place.page.html',
  styleUrls: ['./unusual-place.page.scss'],
})
export class UnusualPlacePage implements OnInit {

  constructor(public afDB: AngularFireDatabase) { }

  ngOnInit() {
  }
/*
  add() {
    this.afDB.list('Users').push({
      pseudo: 'Nicolas'
    });
  }

  delete() {
    this.afDB.list('Test').remove();
  }
  */
}

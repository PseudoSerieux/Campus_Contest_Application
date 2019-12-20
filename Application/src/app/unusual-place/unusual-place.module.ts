import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';

import { IonicModule } from '@ionic/angular';

import { UnusualPlacePageRoutingModule } from './unusual-place-routing.module';

import { UnusualPlacePage } from './unusual-place.page';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    IonicModule,
    UnusualPlacePageRoutingModule
  ],
  declarations: [UnusualPlacePage]
})
export class UnusualPlacePageModule {}

import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';

import { IonicModule } from '@ionic/angular';

import { HikePageRoutingModule } from './hike-routing.module';

import { HikePage } from './hike.page';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    IonicModule,
    HikePageRoutingModule
  ],
  declarations: [HikePage]
})
export class HikePageModule {}

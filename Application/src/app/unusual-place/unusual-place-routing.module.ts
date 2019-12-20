import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { UnusualPlacePage } from './unusual-place.page';

const routes: Routes = [
  {
    path: '',
    component: UnusualPlacePage
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class UnusualPlacePageRoutingModule {}

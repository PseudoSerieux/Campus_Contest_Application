import { NgModule } from '@angular/core';
import { PreloadAllModules, RouterModule, Routes } from '@angular/router';

const routes: Routes = [
  {
    path: '',
    redirectTo: 'randonnée',
    pathMatch: 'full'
  },

  {
    path: 'randonnée',
    loadChildren: () => import('./hike/hike.module').then(m => m.HikePageModule)
  },
  {
    path: 'lieux-insolites',
    loadChildren: () => import('./unusual-place/unusual-place.module').then( m => m.UnusualPlacePageModule)
  },
  {
    path: 'camera',
    loadChildren: () => import('./camera/camera.module').then( m => m.CameraPageModule)
  },
  {
    path: 'maps',
    loadChildren: () => import('./maps/maps.module').then( m => m.MapsPageModule)
  }
];

@NgModule({
  imports: [
    RouterModule.forRoot(routes, { preloadingStrategy: PreloadAllModules })
  ],
  exports: [RouterModule]
})
export class AppRoutingModule {}

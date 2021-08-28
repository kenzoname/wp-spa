import { NgModule } from '@angular/core';
import { PreloadAllModules, RouterModule, Routes } from '@angular/router';
import { ProductComponent } from './product/product.component';
import { PostComponent } from './post/post.component';

const routes: Routes = [
  { path: 'product', component: ProductComponent },
  { path: 'post', loadChildren: () => import('./post/post.module').then(m => m.PostModule)  },
];
@NgModule({
  imports: [RouterModule.forRoot(routes,  {
    preloadingStrategy: PreloadAllModules
  })],


exports: [RouterModule]
})
export class AppRoutingModule { }

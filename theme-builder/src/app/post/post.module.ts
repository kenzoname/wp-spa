import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { Routes, RouterModule } from '@angular/router';
import { PostComponent } from './post.component';
import { PostDetailComponent } from './post-detail/post-detail.component';

const routes: Routes = [
  { path: '', component: PostComponent },
  { path: ':slug', component: PostDetailComponent }
]


@NgModule({
  declarations: [PostComponent, PostDetailComponent],
  imports: [
  RouterModule.forChild(routes),
  CommonModule
  ]
})
export class PostModule { }

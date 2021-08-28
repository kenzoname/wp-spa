import { Component, OnInit } from '@angular/core';
import { PostService } from '../services/post.service';

@Component({
  selector: 'app-post',
  templateUrl: './post.component.html',
  styleUrls: ['./post.component.scss']
})
export class PostComponent implements OnInit {
  data: any[] = [];
  constructor(private post: PostService) { }

  ngOnInit(): void {
    this.post.getPosts(1).subscribe((data: any) => {
      this.data = data;
      console.log('DATA', data);
    });
  }

}

import { Component, OnInit } from '@angular/core';
import { Title } from '@angular/platform-browser';
import { ActivatedRoute } from '@angular/router';
import { PostService } from '../../services/post.service';

@Component({
  selector: 'app-post-detail',
  templateUrl: './post-detail.component.html',
  styleUrls: ['./post-detail.component.scss']
})
export class PostDetailComponent implements OnInit {
  post: any;
  constructor(private activeRoute: ActivatedRoute, private postService: PostService, private title: Title) { }

  ngOnInit(): void {
    let slug = this.activeRoute.snapshot.params.slug;
    if (slug) {
      this.postService.getPost(slug).subscribe((data: any[]) => {
        this.post = data[0];
        this.title.setTitle( data[0].title?.rendered );
        console.log('POST', data);
      })
    }
  }

}

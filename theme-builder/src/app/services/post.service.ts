import { Injectable } from '@angular/core';
import { environment } from 'src/environments/environment';
import { HttpClient } from '@angular/common/http';
import { Observable, of } from 'rxjs';
const { apiUrl } = environment;
@Injectable({
  providedIn: 'root'
})
export class PostService {
  table = 'posts';
  constructor(private $http: HttpClient) { }
  getPosts = (page: number = 1) => {
    return this.$http.get(`${apiUrl}${this.table}&page=${page}`);
  }
  getPost = (slug: string): Observable<any> => {
    if (!slug || !slug.length) return of([{}]);
    return this.$http.get(`${apiUrl}${this.table}&slug=${slug}`);
  }

}

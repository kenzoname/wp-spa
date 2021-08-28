import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-product',
  templateUrl: './product.component.html',
  styleUrls: ['./product.component.scss']
})
export class ProductComponent implements OnInit {

  constructor() { }

  ngOnInit(): void {
    // this.wooProducs.retrieveProducts().subscribe(response => {
    //   console.log(response);
    // }, err => {
    //   console.log(err);
    // });
  }

}


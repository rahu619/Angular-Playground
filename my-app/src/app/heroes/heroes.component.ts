import { Component, OnInit } from '@angular/core';
import { Hero } from '../hero';
import { HEROES } from '../mock-heroes';
import {HttpClient} from '@angular/common/http';
import 'rxjs/Rx';

@Component({
  selector: 'app-heroes',
  templateUrl: './heroes.component.html',
  styleUrls: ['./heroes.component.css']
})

export class HeroesComponent implements OnInit {

  apiurl='https://cors.io/?https://api-test-rahu619.c9users.io/api/heroes/';
  heroes :Hero[];
  lastrow:number;
  selectedHero: Hero;

  constructor(private http: HttpClient) { 
   
  }


  ngOnInit() {

      this.getAll();
  }

  getAll():void{

       this.http.get(this.apiurl+'getall.php')
         .toPromise()
         .then(response => {
           this.heroes= (JSON.parse(response).heroes as Hero[]);
           this.lastrow= this.heroes[this.heroes.length-1].id;

         });
  }

  onSelect(hero: Hero): void {
    this.selectedHero = hero;
  }

  onAdd(heroname: string): void {    
   //this.heroes.push(new Hero(++this.lastrow,heroname));

    this.http.post(this.apiurl+'add.php/'+ new Hero(++this.lastrow,heroname) )
             .then(res=> this.getAll());
  }



}
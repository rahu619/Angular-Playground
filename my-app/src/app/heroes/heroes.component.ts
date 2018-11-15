import { Component, OnInit } from '@angular/core';
import { Hero } from '../hero';
import { HEROES } from '../mock-heroes';
import {HttpClient, HttpHeaders} from '@angular/common/http';
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
  selectedHero: Hero=null;
  newHero:string='';
  

  constructor(private http: HttpClient) { 
   
  }

  ngOnInit() {

      this.getAll();
  }

  getAll():void{

  console.log(this.apiurl+'getall.php');
       this.http.get(this.apiurl+'getall.php')
         .toPromise()
         .then(response => {

          //console.log(JSON.parse(response.toString()));
           this.heroes= (JSON.parse(response.toString()).heroes as Hero[]);
           this.lastrow= this.heroes[this.heroes.length-1].id;
           this.hideDetails();
         });
  }

  onSelect(hero: Hero): void {
    this.selectedHero = hero;
  }

  hideDetails(){
      this.selectedHero=null;
  }

  onAdd(heroname: string): void {    
   var id=(++this.lastrow);

   //let FormData = "id="+id+"&name="+heroname;

    this.http.get(this.apiurl+'add.php?id='+id+'&name='+heroname)
              .toPromise()
             .then(res=> {
               this.getAll();
               this.newHero=null;
             });

   

  }

  onDelete(hero:Hero):void {

  console.log(hero.id);
  
  if(confirm("Delete "+hero.name+"?")) {

    this.http.get(this.apiurl+'delete.php?id=' + hero.id)
             .toPromise()
             .then(res=> {
               this.getAll();
               
             });
  
   }

  }

  onUpdate(hero:Hero):void{

   console.log('Update',hero.id,hero.name);
     this.http.get(this.apiurl+'update.php?id=' + hero.id+'&name='+hero.name)
             .toPromise()
             .then(res=> {
               this.getAll(); 
               //this.hideDetails();          
             });


  }






}
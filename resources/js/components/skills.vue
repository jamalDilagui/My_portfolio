<template>
   <div class="skills">
      <div class="row">
         <div class="col-md-12">
           <div class="card">
               <div class="card-header">
                  {{title}}
               </div>
               <div class="card-body">
               <div class="row text-center service">
                  <div v-for="myskil in myskils" :key="myskil.title" class="col-md-3 col-sm-6 service">
                     <img :src="myskil.icon"/>
                     <h5>{{myskil.title}}</h5>
                     <p>{{myskil.text}}</p>
                  </div>
               </div>
               </div>
            </div>
         </div>
        <div v-for="skill in skills" :key="skill.title" class="col-md-12">
           <div class="card">
               <div class="card-header">
                 {{skill.title}}
               </div>
               <div class="card-body">
                   <ul>
                     <li><img :src="skill.img1"/></li>
                     <li><img :src="skill.img2"/></li>
                     <li><img :src="skill.img3"/></li>
                     <li><img :src="skill.img4"/></li>
                     <li><img :src="skill.img5"/></li>
                     <li><img :src="skill.img6"/></li>
                  </ul>
                  <ul>
                     <li><img :src="skill.img7"/></li>
                     <li><img :src="skill.img8"/></li>
                     <li><img :src="skill.img9"/></li>
                     <li><img :src="skill.img10"/></li>
                     <li><img :src="skill.img11"/></li>
                     <li><img :src="skill.img12"/></li>
                  </ul>
               </div>
            </div>
        </div>
      </div>
   </div>
</template>

<script>
export default {
    data() {
       return {
          skills:[
             {title:'Front-end / Back-end',
             img1:"/images/html.png",
             img2:"/images/css.png",
             img3:"/images/js.png",
             img4:"/images/jq.png",
             img5:"/images/bts.png",
             img6:"/images/vuejs.png",
             img7:"/images/php.jpg",
             img8:"/images/laravel.png",
             img9:"/images/mysql.png",
             img10:"/images/sql.png",
             img11:"/images/ajax.jpg",
             img12:"/images/json.png"
             }
            
          ],
          title:'Skills',
          myskils:[
            {
               icon:'/images/code.jpg',
               title:'Code',
               text:'I care about writing clean, simple and maintainable code that is easy to read and understand for humans.'
            },
            {
                icon:"/images/design.png",
                title:'Design',
                text:'I focus to make a beautifully designed websites, and as with my code.'
             },
             {
               icon:'/images/responsive.png',
               title:'Responsive',
               text:'My projects will work on any device, no matter the size of the screen.'
            }
          ],
       }
    }
}
</script>

<style lang="scss" scoped>
  .skills{
      top: 50%;
      position: relative;
      margin-top: -291px;
      margin-left:100px;
        .service{
           margin-left: 35px;
            img{
                height: 62px;
                padding-bottom: 5px;
            }
            p{
               font-size: 11px;
            }
        }
      h1{
         font-size: 60px;
         font-weight: bold;
      }
      .col-md-12{
         margin-bottom: 17px;
      }
      .card-header{
         background: white;
         margin-left: 19px;
         margin-right: 19px;
      }
      .card{
         text-transform: uppercase;
         color: black;
         font-weight: bold;
         ul{
            li{
               display: inline;
               margin-right: 55px;
               img{
                  height: 86px;
                  width: 96px;
               }
            }
         }
      }
  }
</style>
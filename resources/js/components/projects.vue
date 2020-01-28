<template>
   <div class="projects">
      <div class="row">
        <div v-for="project in projects" :key="project.img" class="col-md-4">
           <!--  <div class="card">
                <div class="card-body">
                    <img :src="project.img1" class="card-img-top" />
                    <div class="midlle">
                        <a href="#">GitHub</a>
                    </div>
                </div>
            </div> -->
            <div class="cnt">
                <img :src="project.img1" class="image" style="width:100%">
                <div class="middle">
                   <a :href="project.link" target="_blank" class="link"><i class="fa fa-github"></i> Github</a>
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
            projects:[
                {
                    img1:"/images/Capture.png",
                    link:'https://github.com/jamalDilagui/Urban'
                },
                {
                    img1:"/images/Capture2.png",
                     link:'https://github.com/jamalDilagui/libration'
                },
                {
                    img1:"/images/Capture3.png",
                     link:'https://github.com/jamalDilagui/Postuiz'
                },
                { 
                    img1:"/images/Capture4.png",
                     link:''
                },
                 {
                    img1:"/images/Capture5.png",
                     link:''
                },
                {
                    img1:"/images/Capture6.png",
                     link:'https://github.com/jamalDilagui/Tedx'
                },
            
            ],
        }
    }
}
</script>

<style lang="scss" scoped>
  .projects{
     .col-md-4{
          margin-top: 20px;
          .card{
              width: 100%;
              .card-img-top{
                height: 250px;
              }
              .card-body{
                color: black;
                padding: 13px;
                text-align: center;
              }
          }
        .cnt {
            position: relative;
            width: 100%;
            height: 293px;
            .image {
                opacity: 1;
                display: block;
                width: 100% !important;
                height: 100% !important;
                height: auto;
                transition: .5s ease;
                backface-visibility: hidden;
            }
            .middle {
                transition: .5s ease;
                opacity: 0;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                -ms-transform: translate(-50%, -50%);
                text-align: center;
            }
            .link {
                border: 1px solid #333;
                background: #333;
                color: white;
                font-size: 16px;
                padding: 16px 32px;
                border-radius: 10px;
                text-decoration: none;
            }
        }
        .cnt:hover .image {
            opacity: 0.3;
        }
        .cnt:hover .middle {
            opacity: 1;
        }
     }
  }
</style>

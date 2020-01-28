<template>
   <div class="about">
      <div class="row">
        <div class="col-md-6">
            <h1>About me</h1><br>
            <p>
               I'm Jamal, i'm a web developer. I make web applications, i design & build user interfaces.
               I enjoy building web applications.
            </p>
            <p>
               Well-organised person, problem solver. Fan of footbal, TV series, training and coding.
            </p>
            <p>
               Passionate about programming and working on ambitious projects with positive people.
            </p>
        </div>
        <div class="col-md-6">
            <router-link to="/mail" class="contact"><i class="fa fa-envelope"></i> contact us</router-link>
        </div>
      </div>
      
   </div>
</template>

<script>
export default {
    
}
</script>

<style lang="scss" scoped>
  .about{
      top: 50%;
      position: relative;
      margin-top: -151px;
      margin-left:100px;
      h1{
         font-size: 60px;
         font-weight: bold;
      }
      p{
         font-size: 14px;
         line-height: 24px;
      }
      .contact{
         text-decoration: none;
         color: white;
         border: 1px solid;
         padding: 10px 69px;
         font-size: 30px;
         left: 50%;
         position: relative;
         margin-left: -142px;
         top: 50%;
         margin-top: -32px;
      }
      .contact:hover{
          background: white;
          color: #464646;
      }
  }
</style>
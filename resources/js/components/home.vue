<template>
   <div class="home">
      <h1>Hello!</h1>
      <p>I'm Jamal,<br>web devloper.</p>
      <a class="dev">front end devloper | back end devloper</a><br><br>
      <router-link to="/about" class="about">about me</router-link>
   </div>
</template>

<script>
export default {
    
}
</script>

<style lang="scss" scoped>
    .home{
       width: 416px;
      top: 50%;
      position: relative;
      margin-top: -151px;
      margin-left:100px;
       h1,p{
          font-size: 60px;
          font-weight: bold;
       }
       p{
          line-height: 65px;
       }
       .about{
          color: white;
          border: 1px solid white;
          padding: 10px 32px;
          text-transform:uppercase;
          text-decoration: none;
          border-radius: 3px;         

       }
       .about:hover{
          background: white;
          color: #464646;
       }
       .dev{
        font-family: 'Cinzel', serif;
        font-size: 15px;
       }
    }
</style>
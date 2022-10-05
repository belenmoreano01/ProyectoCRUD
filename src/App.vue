<template>

  <nav class="navbar navbar-expand navbar-light bg-light">
    <div class="nav navbar-nav">
 
      <router-link to="/create" class="nav-link">Crear</router-link>
      <router-link to="/list" class="nav-link">Empleados</router-link>
      </div>
  </nav>   
  <br/>
  <router-view/>
</template>



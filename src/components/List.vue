<template>
    <div class="container">
<router-link to="/create" class="btn btn-success">Agregar nuevo empleado</router-link>
<br/><br/>
        <div class="card">
            <div class="card-header">
                Empleados
        </div>
        <div class="card-body">
           <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="empleado in empleados" :key="empleado.id">
             
                     <td>{{empleado.id}}</td>
                    <td>{{empleado.nombre}}</td>
                    <td>{{empleado.correo}}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="">
                            <router-link :to="{name:'Edit',params:{id:empleado.id}}" class="btn btn-info">Edit</router-link>
                            <button type="button" v-on:click="borrarEmpleado(empleado.id)" class="btn btn-danger">Borrar</button>

                        </div>
      

                    </td>
                </tr>
                
            </tbody>
           </table>

        </div>        
    </div>
        <div>
            
            <div></div>
            <div></div>
            <div></div>
           
        </div>
    </div>
</template>

<script>
export default {
    data(){
        return{
            empleados:[]
        }
    },
    created:function(){
        this.consultarEmpleados();

    },
    methods:{
        //
        consultarEmpleados(){
            fetch('http://localhost:50/empleados/')
            .then(respuesta=>respuesta.json())
            .then((datosRespuesta)=>{
                console.log(datosRespuesta)
this.empleados=[]
if(typeof datosRespuesta[0].success==='undefined')
{
    this.empleados=datosRespuesta;
}

            })
            .catch(console.log)
        
    },
    borrarEmpleado(id){

        console.log(id);
            fetch('http://localhost:50/empleados/?borrar='+id)
            .then(respuesta=>respuesta.json())
            .then((datosRespuesta)=>{
                console.log(datosRespuesta)
           window.location.href="list"
                        })
                        .catch(console.log)
                    }
                }
                
}
</script>
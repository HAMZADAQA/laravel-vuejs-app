<template>
    <div>
        <h1>Agregar Tareas</h1>
        <form @submit.prevent="agregar">
        <div class="form-group">
            <label>Escribe Tu Nombre</label>
            <input v-model="nota.nombre" type="text" class="form-control" placeholder="Nombre">
        </div>
        <div>
            <label >Descripcion</label>
            <input v-model="nota.descripcion" type="text" class="form-control"  placeholder="Descripcion">
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" >
            <label class="form-check-label" >Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Agregar</button>
        </form>
    </div>
</template>

<script>
export default {
    data(){
       return {
           notas: [],
           nota: {nombre: '', descripcion: ''}
       }
    },
    methods:{
        agregar(){
            if(this.nota.nombre.trim() === '' || this.nota.descripcion.trim() === ''){
                alert('Debes completar todos los campos antes de guardar');
            }
            console.log(this.nota.nombre , this.nota.descripcion);
            const params = {
            nombre: this.nota.nombre,
            descripcion:this.nota.descripcion
            }
            this.nota.nombre = '';
            this.nota.descripcion ='';
           
           axios.post('/', params)
            .then(res => {
                this.notas.push(res.data);
            })
        }
    }
    
}
</script>
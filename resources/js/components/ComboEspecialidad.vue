<template>
    <div>
        <div class="form-group row">
            <label for="especialidad" class="col-md-4 col-form-label text-md-right">Especialidad:</label>
            <div class="col-md-6">
                <div v-if="formulario == 'editar'">
                    <div v-for="especialidad in especialidades" :key="especialidad.id" :value="especialidad.id">
                        <h5><span class="badge badge-info p-2" v-if="especialidad.id == especialidadId"> {{ especialidad.nombre }}</span></h5>
                    </div>
                </div>
                <select @change="$emit('especialidad-select', $event.target.value)" class="form-control" v-if="formulario == 'crear'">
                    <option value="0">--Seleccionar especialidad--</option>
                    <option v-for="especialidad in especialidades" :key="especialidad.id" :value="especialidad.id" :selected="especialidad.id == especialidadId">{{ especialidad.nombre }}</option>
                </select>
            </div>
        </div>
        <!-- <p>{{ formulario}}</p> -->
    </div>
</template>

<script>
export default {
    props:[
       'especialidadId',
       'especialidadNombre',
       'formulario'
    ],
    data() {
        return {
            especialidades:[],
            nombreEspecialidad: ''
        }
    },
    created: function(){
        this.getEspecialidades();
    },
    methods: {
        getEspecialidades: function (){
            let urlEspecialidades = '/citas/especialidades';
             axios.get(urlEspecialidades)
            .then(response => {
                this.especialidades = response.data;
            })
            .catch(error => {
                console.log(error);
            });
        },
        getNombreEspecialidad: function(id) {

            this.nombreEspecialidad = this.especialidades.find(function(especialidad){
                return especialidad.id == id;
            }).nombre;
        },
    }
}
</script>

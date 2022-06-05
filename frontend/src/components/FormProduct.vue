<template>
  <div>
    <div id="form-product" class="border border-secondary p-4">
      <form @submit.prevent="addProduct">
        <div class="row mb-3">
          <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
          <div class="col-sm-10">
            <input
              type="text"
              class="form-control"
              id="nombre"
              name="nombre"
              v-model="nombre"
            />
          </div>
        </div>

        <div class="row mb-3">
          <label for="sku" class="col-sm-2 col-form-label">SKU</label>
          <div class="col-sm-10">
            <input
              type="text"
              class="form-control"
              id="sku"
              name="sku"
              v-model="sku"
            />
          </div>
        </div>

        <div class="row mb-3">
          <label for="marca" class="col-sm-2 col-form-label">Marca</label>
          <div class="col-sm-10">
            <input
              type="text"
              class="form-control"
              id="marca"
              name="marca"
              v-model="marca"
            />
          </div>
        </div>

        <div class="row mb-3">
          <label for="costo" class="col-sm-2 col-form-label">Costo</label>
          <div class="col-sm-10">
            <input
              type="text"
              class="form-control"
              id="costo"
              name="costo"
              v-model="costo"
            />
          </div>
        </div>

        <div class="row">
          <div class="col-sm-10 offset-md-2">
            <button
              type="button"
              class="btn btn-outline-success"
              @click="addProduct"
            >
              Guardar
            </button>
          </div>
        </div>
      </form>

      <div
        class="alert mt-3 alert-dismissible fade show"
        :class="isSuccess ? 'alert-success' : 'alert-danger'"
        role="alert"
        v-if="showAlert"
      >
        {{ message }}
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="alert"
          aria-label="Cerrar"
          @click="showAlert = false"
        ></button>
      </div>
    </div>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  name: 'FormProduct',
  data() {
    return {
      nombre: '',
      sku: '',
      marca: '',
      costo: '',
      message: '',
      isSuccess: false,
      showAlert: false,
    };
  },
  methods: {
    clearForm() {
      this.nombre = '';
      this.sku = '';
      this.marca = '';
      this.costo = '';
    },

    addProduct() {
      if (this.nombre && this.sku && this.marca && this.costo) {
        const formData = new FormData();

        formData.append('nombre', this.nombre);
        formData.append('sku', this.sku);
        formData.append('marca', this.marca);
        formData.append('costo', this.costo);

        axios
          .post('/create-product', formData, {
            headers: { 'Content-Type': 'application/json' },
          })
          .then(({ data }) => {
            if (data.code == 1) {
              this.$emit('product-created', true);
              this.clearForm();
              this.message = 'Se ha creado correctamente el producto';
            } else {
              this.message = 'Ha habido un error al intentar crear el producto';
            }

            this.showAlert = true;
          });
      } else {
        this.showAlert = true;
        this.message = 'Debes llenar todos los campos';
      }
    },
  },
};
</script>

<style scoped>
#form-product {
  border-radius: 0.5rem;
}
</style>

<template>
  <div class="mt-1">
    <h3>Almacén de Productos</h3>
    <br class="clearfix" />

    <form-product @product-created="fetchProducts" />
    <br class="clearfix" />
    <br class="clearfix" />

    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">Nombre Producto</th>
          <th scope="col">SKU</th>
          <th scope="col">Marca</th>
          <th scope="col">Precio</th>
          <th scope="col">Acciones</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="item in products" :key="item.id">
          <td>{{ item.nombre }}</td>
          <td>{{ item.sku }}</td>
          <td>{{ item.marca }}</td>
          <td>${{ item.precio }}</td>
          <td>
            <div class="">
              <button
                class="btn btn-outline-info btn-sm me-2"
                @click="editar(item.id)"
              >
                Editar
              </button>
              <button
                class="btn btn-outline-danger btn-sm"
                @click="elimiar(item.id)"
              >
                Eliminar
              </button>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
import axios from 'axios';
import FormProduct from '@/components/FormProduct.vue';

export default {
  name: 'HomeView',
  components: {
    FormProduct,
  },
  data() {
    return {
      products: [],
    };
  },
  mounted() {
    this.fetchProducts();
  },
  methods: {
    fetchProducts() {
      axios
        .get('/fetch-all', {
          headers: { 'Content-Type': 'application/json' },
        })
        .then((response) => (this.products = response.data));
    },

    editar() {},

    elimiar(id) {
      axios
        .delete(`/delete-product/${id}`)
        .then((response) => console.log(response));
    },
  },
};
</script>

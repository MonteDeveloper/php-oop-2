const app = Vue.createApp({
    data() {
      return {
        cartList: [],
        totalCartQuantity: 0
      }
    },
    methods: {
      addCart(newProduct) {
        let productExists = false;
  
        this.cartList.forEach((product) => {
          if (product.name === newProduct) {
            product.quantity++;
            productExists = true;
          }
        });
  
        if (!productExists) {
          this.cartList.push({ name: newProduct, quantity: 1 });
        }

        this.totalCartQuantity++;
      }
    }
  });
  
  app.mount('#app');
  
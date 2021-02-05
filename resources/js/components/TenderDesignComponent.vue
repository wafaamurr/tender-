<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Example Component</div>

          <div class="card-body">
            <h1>Tenders</h1>
            <button v-on:click="getData()" value="get">GET</button>
            <ul>
              <li v-for="item in users">
                <strong>{{ item.id }} {{ item.name }}</strong> ,
                {{ item.description }}
                <a v-on:click.prevent="editItem(item)" class="btn btn-sucsess">
                  Edit</a
                >
                <a
                  v-on:click.prevent="deleteProduct(item)"
                  class="btn btn-sucsess"
                >
                  Delete</a
                >
              </li>
            </ul>

            <h3>Add Products</h3>
            <p>{{ operation }}</p>
            <form v-on:submit.prevent="saveData()">
              Name: <input type="text" v-model="newItem.name" /> Desc:
              <input type="text" v-model="newItem.description" /> cat id
              <input type="text" v-model="newItem.id" />
              <input type="submit" value="submit" />
              <a
                class="btn ban-danger"
                v-if="operation == 'edit'"
                v-on:click.prevent="cancelEdit()"
              >
                cancel</a
              >
            </form>
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
      info: null,
      users: [],
      newItem: {},
      operation: "add",
    };
  },

  //Page Event

  mounted() {
    this.getData();
  },

  //End of Page Events

  // Methods
  methods: {
    add_user() {
      users.add({ name: "WAFAA" });
    },

    getData() {
      console.log("OPEN");
      axios.get("http://127.0.0.1:8000/pp").then((response) => {
        console.log(response.data);
        this.users = response.data;
      });
    },

    saveData() {
      if (this.operation == "add") {
        this.addProduct();
      } else {
        this.updateProduct();
      }
    },
    addProduct() {
      console.log("adding products", this.newItem);
      axios
        .post("http://127.0.0.1:8000/pp", this.newItem)
        .then((response) => {
          console.log("DONE", response, this.users);
          //   this.getData();
          var item = response.data;
          this.users.push(item);
        })
        .catch((error) => {
          console.log("IS ERROR", error);
        });
    },

    editItem(item) {
      this.operation = "edit";
      this.newItem = item;
    },
    cancelEdit() {
      this.operation = "add";
      this.newItem = {};
    },
    updateProduct() {
      console.log("adding products", this.newItem);
      axios
        .put("http://127.0.0.1:8000/pp/" + this.newItem.id, this.newItem)
        .then((response) => {
          console.log("DONE", response, this.users);
          var item = response.data;
          this.operation = "add";
        })
        .catch((error) => {
          console.log("IS ERROR", error);
        });
    },

    deleteProduct(item) {
      axios
        .delete("http://127.0.0.1:8000/pp/" + item.id)
        .then((response) => {
          console.log("DONE", response, this.users);
          //   var item = response.data;
          // this.operation="add";
          this.getData();
        })
        .catch((error) => {
          console.log("IS ERROR", error);
        });
    },
    //Add you functions here
  },

  //End Methods
};
</script>

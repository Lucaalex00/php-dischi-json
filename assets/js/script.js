const app = Vue.createApp({
  data() {
    return {
      diskList: [],
      getDisk_url: "./api.php",
    };
  },
  mounted() {
    axios
      .get(this.getDisk_url)
      .then((response) => {
        this.diskList = response.data; // OTTENGO VALORI DELLA CHIAMATA E LI INSERISCO NELLA MIA ARRAY.
        console.log(this.diskList);
      })
      .catch((error) => {
        console.error("Error during disks' loading :", error);
      });
  },
}).mount("#app");

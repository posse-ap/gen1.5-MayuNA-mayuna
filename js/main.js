(function () {
  "use strict";
})();

//two way data binding
const app = {
  data() {
    return {
      name: "taguch",
    };
  },
};

Vue.createApp(app).mount("#app");

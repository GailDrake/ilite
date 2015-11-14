 FlowRouter.route("/", {
  action(){ BlazeLayout.render("layout", {}) }
});

FlowRouter.route("/iroc", {
  action(){ BlazeLayout.render("iroc", {}) }
});

// FlowRouter.route('/iroc', {
//     name: "layout",
//     action: function(params, queryParams) {
//       console.log("iroc");
//     }
// });

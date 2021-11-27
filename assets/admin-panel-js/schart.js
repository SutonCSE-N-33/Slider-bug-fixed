$(function () {
    const ctx = document.getElementById("subChart").getContext("2d");
    const myChart = new Chart(ctx, {
      type: "polarArea",
      data: {
        labels: [
          "Jan-Feb",
          "Mar-Apr",
          "May-Jun",
          "Jul-Aug",
          "Sep-Oct",
          "Nov-Dec",
        ],
        datasets: [
          {
          //   label: "Viewers Graph",
            //   data: [12, 19, 3, 5, 2, 3],
            data: [200, 350, 600, 950, 1100, 1250],
            backgroundColor: [
              "rgba(75, 192, 192, .5)",
              "rgba(54, 162, 235, .5)",
              "rgba(255, 206, 86, .5)",
              "rgba(255, 99, 132, .5)",
              "rgba(153, 102, 255, .5)",
              "rgba(255, 159, 64, .5)",
            ],
            borderColor: [
              "rgba(75, 192, 192, .5)",
              "rgba(54, 162, 235, .5)",
              "rgba(255, 206, 86, .5)",
              "rgba(255, 99, 132, .5)",
              "rgba(153, 102, 255, .5)",
              "rgba(255, 159, 64, .5)",
            ],
            borderWidth: 1,
          },
        ],
      },
      options: {
        responsive: true,
      },
    });
  });
  
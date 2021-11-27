$(function () {
    const ctx = document.getElementById("earnChart").getContext("2d");
    const myChart = new Chart(ctx, {
      type: "line",
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
            label: "Earnings Graph",
            data: [800, 1000, 1500, 3500, 2500, 4700],
            backgroundColor: [
              "rgba(75, 192, 192, 1)",
              "rgba(54, 162, 235, 1)",
              "rgba(255, 206, 86, 1)",
              "rgba(255, 99, 132, 1)",
              "rgba(153, 102, 255, 1)",
              "rgba(255, 159, 64, 1)",
            ],
            borderColor: [
              "rgba(75, 192, 192, 1)",
              "rgba(54, 162, 235, 1)",
              "rgba(255, 206, 86, 1)",
              "rgba(255, 99, 132, 1)",
              "rgba(153, 102, 255, 1)",
              "rgba(255, 159, 64, 1)",
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
  
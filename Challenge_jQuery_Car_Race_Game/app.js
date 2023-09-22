$(function () {
    const generateRandomTime = (max) => Math.round(Math.random() * max * 1000);
    //write your code here
    const carOne = $("#car-one");
    const carTwo = $("#car-two");
    const raceTrack = $("#race-track");
  
    const startRaceBtn = $("#start-race");
    const reStartBtn = $("#restart");
    const raceOverlay = $(".overlay");
  
    function init() {
      const carOneInfo = JSON.parse(localStorage.getItem("carOneInfo"));
      const carTwoInfo = JSON.parse(localStorage.getItem("carTwoInfo"));
      reStartBtn.prop("disabled", true);
      if (carOneInfo && carTwoInfo) {
        $("#previous-race-results").html(
          `<div class="car-one-results result"><span>Car1</span> finished in <span>${carOneInfo.carOnePlacement}</span> with a time of <span>${carOneInfo.carOneTime}ms</span></div>
          <div class="car-two-results result"><span>Car2</span> finished in <span>${carTwoInfo.carTwoPlacement}</span> with a time of <span>${carTwoInfo.carTwoTime}ms</span></div>`
        );
      }
    }
    init();
    function completeRace() {
      raceOverlay.fadeIn(100);
      raceOverlay.html('<img src="finish.gif" alt="Finish flag">');
    }
  
    function generatePlacementString(isFirst) {
      if (isFirst) {
        return "first";
      }
      return "second";
    }
  
    function disableButtons() {
      startRaceBtn.prop("disabled", true);
      reStartBtn.prop("disabled", true);
    }
  
    startRaceBtn.click(function () {
      const carOneTime = generateRandomTime(10);
      const carTwoTime = generateRandomTime(10);
  
      const isCarOneFaster = carOneTime < carTwoTime;
  
      disableButtons();
      let countdownTimer = 3;
      raceOverlay.html(countdownTimer);
      raceOverlay.addClass('center')
      raceOverlay.fadeIn(100, () => {
        const intervalID = setInterval(() => {
          countdownTimer--;
          raceOverlay.html(countdownTimer);
          if (countdownTimer === 0) {
            clearInterval(intervalID);
            raceOverlay.fadeOut(100, () => {
              carOne.animate(
                { left: `${raceTrack.width() - carOne.width()}px` },
                carOneTime,
                () => {
                  const carOnePlacement = generatePlacementString(isCarOneFaster);
                  localStorage.setItem(
                    "carOneInfo",
                    JSON.stringify({
                      carOneTime: carOneTime,
                      carOnePlacement: carOnePlacement,
                    })
                  );
                  if (isCarOneFaster) {
                    completeRace();
                  } else {
                    reStartBtn.prop("disabled", false);
                  }
                  $(".col-md-3.car-one-results").append(
                    `<div class="result">Finished in: <span>${carOnePlacement}</span> with a time of <span>${carOneTime}ms</span></div>`
                  );
                }
              );
              carTwo.animate(
                { left: `${raceTrack.width() - carTwo.width()}px` },
                carTwoTime,
                () => {
                  const carTwoPlacement = generatePlacementString(
                    !isCarOneFaster
                  );
                  localStorage.setItem(
                    "carTwoInfo",
                    JSON.stringify({
                      carTwoTime: carTwoTime,
                      carTwoPlacement: carTwoPlacement,
                    })
                  );
                  if (!isCarOneFaster) {
                    completeRace();
                  } else {
                    reStartBtn.prop("disabled", false);
                  }
                  $(".col-md-3.car-two-results").append(
                    `<div class="result">Finished in: <span>${carTwoPlacement}</span> with a time of <span>${carTwoTime}ms</span></div>`
                  );
                }
              );
            });
          }
        }, 1000);
      });
    });
  
    reStartBtn.click(() => {
      carOne.css({ left: "0" });
      carTwo.css({ left: "0" });
      raceOverlay.fadeOut(100);
      startRaceBtn.prop("disabled", false);
      reStartBtn.prop("disabled", true);
    });
  });
  
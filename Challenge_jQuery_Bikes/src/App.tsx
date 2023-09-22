import React, { useState, useEffect } from "react";
import Card from "./components/Card";
import Category from "./components/Category";
import Footer from "./components/Footer";
import Header from "./components/Header";

const API_ENDPOINT: string = "https://json-project3.herokuapp.com/products";

export type Bike = {
  name: string;
  price: number;
  gender: "FEMALE" | "MALE";
  brand: string;
  image: string;
};

function App() {
  const [bikes, setBikes] = useState([]);
  const [filteredBikes, setFilteredBikes] = useState([]);
  const [activeFilter, setActiveFilter] = useState("");

  useEffect(() => {
    const fetchFromAPI = async () => {
      const response = await fetch(API_ENDPOINT);
      const result = await response.json();
      setBikes(result);
      setFilteredBikes(result);
    };
    fetchFromAPI();
  }, []);
  console.log(bikes);

  const brands = bikes.reduce((accumulator: string[], el: Bike) => {
    if (!accumulator.includes(el.brand)) {
      accumulator = [...accumulator, el.brand];
    }
    return accumulator;
  }, []);

  const genders = bikes.reduce((accumulator: string[], el: Bike) => {
    if (!accumulator.includes(el.gender)) {
      accumulator = [...accumulator, el.gender];
    }
    return accumulator;
  }, []);

  const filterBikes = (filterParam: string, filterCategory: string): Bike[] => {
    if (filterCategory === "") {
      return bikes;
    }
    const filteredBikes = bikes.filter(
      (bike) => bike[filterCategory] === filterParam
    );
    return filteredBikes;
  };

  return (
    <div className="container">
      <main className="bg-white px-2 shadow-xl">
        <Header />
        <div className="border-slate-400 border-b-2 py-6">
          <h1 className="text-5xl tracking-wide">Bikes</h1>
        </div>
        <div className="flex items-baseline">
          <div className="basis-1/5 flex flex-col gap-4" id="wrapper">
            <Category
              title="Filter By"
              filterBikes={filterBikes}
              setFilteredBikes={setFilteredBikes}
              activeFilter={activeFilter}
              setActiveFilter={setActiveFilter}
            />
            <Category
              title="By Genders"
              filterParam="gender"
              filters={genders}
              filterBikes={filterBikes}
              setFilteredBikes={setFilteredBikes}
              activeFilter={activeFilter}
              setActiveFilter={setActiveFilter}
            />
            <Category
              title="By Brand"
              filterParam="brand"
              filters={brands}
              filterBikes={filterBikes}
              setFilteredBikes={setFilteredBikes}
              activeFilter={activeFilter}
              setActiveFilter={setActiveFilter}
            />
          </div>

          <div
            className="basis-4/5 grid gap-4 grid-cols-3 pl-6 py-6"
            id="card-holder"
          >
            {filteredBikes.map((bike, i) => (
              <Card bike={bike} key={i} />
            ))}
          </div>
        </div>

        <Footer />
      </main>
    </div>
  );
}

export default App;

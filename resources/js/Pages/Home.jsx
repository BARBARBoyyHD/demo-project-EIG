import React, { useEffect, useState } from 'react';

const Home = () => {
  // State to hold fetched data
  const [data, setData] = useState(null);

  // Function to fetch data
  const getData = () => {
    fetch("http://127.0.0.1:8000/data", {
      method: "GET",
      headers: {
        "Content-Type": "application/json",
      },
    })
      .then((response) => {
        if (!response.ok) {
          throw new Error(`HTTP error! Status: ${response.status}`);
        }
        return response.json();
      })
      .then((data) => {
        setData(data); // Save the fetched data in state
      })
      .catch((error) => console.error("Error fetching data:", error));
  };

  // Fetch data on component mount
  useEffect(() => {
    getData();
  }, []);

  return (
    <div>
      <h1>Fetched Data:</h1>
      {data ? (
        <pre>{JSON.stringify(data, null, 2)}</pre> // Display the data in a formatted way
      ) : (
        <p>Loading...</p> // Show a loading message while fetching
      )}
      <h1>Static Text</h1>
    </div>
  );
};

export default Home;

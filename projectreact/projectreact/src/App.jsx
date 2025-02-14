import { useState } from "react";
import reactLogo from "./assets/react.svg";
import viteLogo from "/vite.svg";
import "./App.css";
import Panasz from "./components/Panasz";

function App() {
  function WriteJson(data) {
    return (
      <>
        {data.map((panasz) => (
          <Panasz
            key={panasz.id}
            panaszNev={panasz.panasz_megnevezes}
            leiras={panasz.panasz_pontos_leirasa}
            bejelento={panasz.panaszbejelento_neve}
            datum={panasz.panasz_bejelentesenek_datuma}
            panaszTorles={() => deletePanasz(panasz.id)}
          ></Panasz>
        ))}
      </>
    );
  }

  function OsszesPanasz() {
    fetch(`http://127.0.0.1:8000/api/`)
      .then((response) => response.json())
      .then((json) => setData(json))
      .catch((error) => console.error(error));
  }

  const deletePanasz = (id) => {
    fetch(`http://127.0.0.1:8000/api/panasz/${id}`, { method: "DELETE" })
      .then((response) => response.json())
      .then(() => {
        setData((values) => {
          return values.filter((item) => item.id !== id);
        });
      });
  };

  const [data, setData] = useState(null);

  return (
    <>
      {OsszesPanasz()}
      {data ? <div>{WriteJson(data)}</div> : <div></div>}
    </>
  );
}

export default App;

const Panasz = (props) => {
  return (
    <>
      <div className="panasz">
        <h2>{props.panaszNev}</h2>
        <p>{props.leiras}</p>
        <h1>{props.bejelento}</h1>
        <p>
          <span>{props.datum}</span>
        </p>

        <footer>
          <button onClick={props.panaszTorles}>Törlés</button>
        </footer>
      </div>
    </>
  );
};

export default Panasz;

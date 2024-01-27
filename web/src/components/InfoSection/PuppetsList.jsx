import React, { useEffect, useState } from 'react';
import PropTypes from 'prop-types';
import {createMyAxiosInstance} from "../../instances/myAxios";
import {translatePuppetsListComponent} from "../../stores/translationService";

const PuppetsList = ({ roomNumber, onData, language }) => {
  const [puppets, setPuppets] = useState([]);
  const [loading, setLoading] = useState(true);
  const [error, setError] = useState(null);


  useEffect(() => {
    let isCancelled = false;
    const myAxios = createMyAxiosInstance(language);

    const fetchPuppets = async () => {
      try {
        const response = await myAxios.get(`/room/${roomNumber}/puppets`);
        if (!isCancelled) {
          setPuppets(response.data.puppets);
          setLoading(false);
        }
      } catch (error) {
        if (!isCancelled) {
          setError(error);
          setLoading(false);
        }
      }
    };

    fetchPuppets();
    return () => {
      isCancelled = true;
    };
  }, [roomNumber]);

  // const getRandomSize = () => {
  //   return { width: '200px', height: '300px' };
  // };

  const sendDataToParent = (puppet_identification) => {
    onData(puppet_identification);
  };


  return (
      <div className="puppet-list">
        {loading && <p>{translatePuppetsListComponent('loadingReminder', language)}</p>}
        {error && <p>{translatePuppetsListComponent('errorReminder', language)}</p>}
        {error && <p>{error.message}</p>}
          {puppets.map(pop => (
              <div className="button-wrapper" key={pop.id}>
                <button onClick={() => sendDataToParent({id: pop?.id, objectNumber: pop?.object_number})}>
                  <div className="puppetListWrapper">
                    <img src={`${import.meta.env.VITE_BACKEND_BASE_URL}/api/image/${pop?.object_number}/600`}
                         alt={pop.name}/>
                  </div>
                </button>
              </div>
          ))}
      </div>
  );
};

PuppetsList.propTypes = {
  roomNumber: PropTypes.string.isRequired,
  onData: PropTypes.func.isRequired
};

export default PuppetsList;

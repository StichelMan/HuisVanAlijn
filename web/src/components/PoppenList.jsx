import React from 'react';
import axios from 'axios';
import PropTypes from "prop-types";

export default class PoppenList extends React.Component {
    state = {
        puppets: [],
        loading: true,
        error: null,
        kamerNumber: this.props.kamerNumber,
    }

    componentDidMount() {
        this.fetchPuppets();
    }

    getRandomSize() {
        const randomSize = Math.floor(Math.random() * 3) + 1;
        switch (randomSize) {
            case 1:
                return { width: '200px', height: '300px' };
            case 3:
                return { width: '300px', height: '200px' };
            default:
                return { width: '200px', height: '300px' }; // Default size
        }
    }

    fetchPuppets() {
        const { kamerNumber } = this.props;

        axios.get(`${import.meta.env.VITE_BACKEND_BASE_URL}/api/nl/room/${kamerNumber}/puppets`)
            .then(res => {
                const puppets = res.data;
                this.setState({ puppets, loading: false });
            })
            .catch(error => {
                this.setState({ error, loading: false });
            });
    }

    render() {
        const { puppets, loading, error } = this.state;
        //console.log(this.state.kamerNumber)
        return (
            <div>
                {loading && <p>Loading puppets...</p>}
                {error && <p>Error loading puppets: {error.message}</p>}
                <ul>
                    {puppets.map(pop => (
                        <li key={pop?.id} style={this.getRandomSize()}>{pop?.object_number}</li>
                    ))}
                </ul>
            </div>
        )
    }
}

PoppenList.propTypes = {
    kamerNumber: PropTypes.number.isRequired,
};
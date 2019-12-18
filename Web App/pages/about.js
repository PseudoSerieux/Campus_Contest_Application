import LayoutBack from '../components/LayoutBack';
import Link from 'next/link';
import Header from '../components/Header';
import fetch from 'isomorphic-unfetch';
import Button from '@material-ui/core/Button';

const About = props => (
    <LayoutBack>
        <Header />
        <p>This is the about page</p>
    </LayoutBack>
);

export default About;
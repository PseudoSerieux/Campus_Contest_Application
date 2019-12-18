import LayoutBack from '../components/LayoutBack';
import Link from 'next/link';
import Header from '../components/Header';
import fetch from 'isomorphic-unfetch';
import Button from '@material-ui/core/Button';

const Index = props => (
    <LayoutBack>
        <Header />
        <h1>Batman TV Shows</h1>
        <Button variant="contained" color="primary">
            Hello World
        </Button>
        <ul>
            {props.shows.map(show => (
                <li key={show.id}>
                    <Link href="/p/[id]" as={`/p/${show.id}`}>
                        <a>{show.name}</a>
                    </Link>
                </li>
            ))}
        </ul>
    </LayoutBack>
);

Index.getInitialProps = async function() {
    const res = await fetch('https://api.tvmaze.com/search/shows?q=batman');
    const data = await res.json();

    console.log(`Show data fetched. Count: ${data.length}`);

    return {
        shows: data.map(entry => entry.show)
    };
};

export default Index;
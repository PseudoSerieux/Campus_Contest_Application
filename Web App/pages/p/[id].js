import { useRouter } from 'next/router';
import LayoutBack from '../../components/LayoutBack.js';

export default function Post() {
    const router = useRouter();

    return (
        <LayoutBack>
            <h1>{router.query.id}</h1>
            <p>This is the blog post content.</p>
        </LayoutBack>
    );
}
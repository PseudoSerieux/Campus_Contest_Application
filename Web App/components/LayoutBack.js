import React from 'react';
import CssBaseline from '@material-ui/core/CssBaseline';
import Container from '@material-ui/core/Container';

const FixedContainer = props => (
    <React.Fragment>
        <CssBaseline />
        <Container fixed>
            {props.children}
        </Container>
    </React.Fragment>
)

export default FixedContainer;
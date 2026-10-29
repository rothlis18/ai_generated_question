To design a robust and scalable system for inter-agent communication and coordination in a dynamic, self-organizing network of autonomous agents across a geographically distributed, heterogeneous computing infrastructure, we must consider several key factors:

1. **Resource Allocation Constraints:**
   - The system must handle resource fluctuations between 10% and 50%. This requires a flexible and adaptive communication protocol that can dynamically adjust to varying loads.

2. **Communication Protocols:**
   - Implement a decentralized gossip protocol with a message propagation delay of less than 50 milliseconds. This ensures rapid dissemination of information across the network, minimizing latency and network congestion.

3. **Infrastructure Mechanisms:**
   - Network latency and bandwidth limitations must be accounted for. For instance, in a heterogeneous computing infrastructure, some nodes may have lower bandwidth capabilities. The communication protocol should prioritize message size and frequency to accommodate these differences.

4. **Agent Population Size:**
   - With an expected agent population ranging from 100 to 10,000, communication overhead and coordination complexity must be managed. A scalable gossip protocol can help distribute the communication load, reducing the impact of individual node failures and ensuring efficient resource allocation.

5. **Resilience to Unpredictable Failures:**
   - Implement redundancy in communication paths and use fault-tolerant mechanisms such as Byzantine fault tolerance (BFT) to ensure the system remains operational even in the face of node failures.

6. **Evolving Resource Demands:**
   - The system should incorporate machine learning algorithms to predict and adapt to evolving resource demands. This can be achieved through continuous monitoring and feedback loops that adjust resource allocation strategies in real-time.

By integrating these elements, the communication and coordination system will be capable of maintaining individual agent autonomy while ensuring collective system-level efficiency. The use of a decentralized gossip protocol with specific constraints on message propagation delay, combined with infrastructure considerations and adaptive resource management, will ensure the system remains resilient and scalable under varying conditions.